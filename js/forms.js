/* Shared form UX. All network submissions are initiated only by the user. */
(() => {
  document.querySelectorAll('form[data-async-form]').forEach(form => {
    const feedback = form.querySelector('.form-feedback');
    const button = form.querySelector('button[type="submit"]');
    if (!feedback || !button) return;
    let submitting = false;
    const serviceOptions = [...form.querySelectorAll('input[name="services[]"]')];
    const validateServices = () => {
      if (serviceOptions.length) serviceOptions[0].setCustomValidity(serviceOptions.some(input => input.checked) ? '' : 'Please select at least one service.');
    };
    serviceOptions.forEach(input => input.addEventListener('change', validateServices));
    const website = form.querySelector('input[name="website"]');
    const normalizeWebsite = () => {
      const value = website.value.trim();
      if (value && !/^[a-z][a-z0-9+.-]*:/i.test(value)) website.value = 'https://' + value;
    };
    website?.addEventListener('blur', normalizeWebsite);
    website?.addEventListener('change', normalizeWebsite);
    website?.addEventListener('keydown', event => { if (event.key === 'Enter') normalizeWebsite(); });
    form.addEventListener('submit', async event => {
      event.preventDefault();
      if (submitting) return;
      form.querySelectorAll('input:not([type="checkbox"]),textarea').forEach(input => { input.value = input.value.trim(); });
      validateServices();
      if (!form.checkValidity()) { form.reportValidity(); return; }
      const original = button.innerHTML;
      const controller = new AbortController();
      const timeout = setTimeout(() => controller.abort(), 20000);
      submitting = true;
      button.disabled = true;
      button.textContent = 'Sending…';
      form.setAttribute('aria-busy', 'true');
      feedback.dataset.state = 'pending';
      feedback.textContent = 'Sending your request…';
      try {
        const quick = form.dataset.asyncForm === 'quick-proposal';
        const data = new FormData(form);
        const response = await fetch(form.action, {
          method:'POST',
          body:quick ? new URLSearchParams(data) : data,
          headers:quick ? {'Content-Type':'application/x-www-form-urlencoded'} : {'Accept':'application/json'},
          signal:controller.signal
        });
        if (quick) {
          const result = (await response.text()).trim();
          if (!response.ok || result !== 'OK') throw new Error('We could not send your request. Please try again or contact us directly.');
        } else {
          let result;
          try { result = await response.json(); } catch { throw new Error('We could not confirm your request. Please try again or contact us directly.'); }
          if (!response.ok || result.status !== 'success') throw new Error(result.errors?.join(' ') || result.message || 'We could not send your request. Please try again.');
        }
        feedback.dataset.state = 'success';
        feedback.textContent = 'Thank you. Your request has been sent. Our team will be in touch.';
        form.reset();
        serviceOptions[0]?.setCustomValidity('');
      } catch (error) {
        feedback.dataset.state = 'error';
        feedback.textContent = error.name === 'AbortError' ? 'This is taking longer than expected. Please try again or contact us directly.' : (error.message === 'Failed to fetch' ? 'Connection failed. Your details are still here; please try again.' : error.message);
        feedback.focus();
      } finally {
        clearTimeout(timeout);
        submitting = false;
        button.disabled = false;
        button.innerHTML = original;
        form.removeAttribute('aria-busy');
      }
    });
  });
})();
