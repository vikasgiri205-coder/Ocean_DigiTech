(function () {
    'use strict';

    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    document.querySelectorAll('[data-portfolio-video]').forEach(function (video) {
        var card = video.closest('.showcase-card');
        var hovering = false;

        function stopPreview() {
            hovering = false;
            video.pause();
        }

        card.addEventListener('pointerenter', function (event) {
            if (event.pointerType === 'touch' || reducedMotion.matches) return;
            hovering = true;
            video.muted = true;
            var playback = video.play();
            if (playback) playback.then(function () {
                if (!hovering) video.pause();
            }).catch(function () {
                // Native controls remain available if autoplay is blocked.
            });
        });
        card.addEventListener('pointerleave', stopPreview);
        document.addEventListener('visibilitychange', function () {
            if (document.hidden) stopPreview();
        });
        reducedMotion.addEventListener('change', function () {
            if (reducedMotion.matches) stopPreview();
        });
    });
}());
