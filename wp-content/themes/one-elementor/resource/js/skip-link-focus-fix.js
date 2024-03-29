/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
/(trident|msie)/i.test(navigator.userAgent) &&
    document.getElementById &&
    window.addEventListener &&
    window.addEventListener(
        "hashchange",
        function () {
            var t,
                e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus());
        },
        !1
    );
