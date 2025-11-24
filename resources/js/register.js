document.addEventListener("DOMContentLoaded", () => {
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    // Toggle password
    if (togglePassword && passwordInput) {
        togglePassword.addEventListener("click", () => {
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            togglePassword.innerHTML = type === "password"
                ? '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.835-.64 1.627-1.09 2.357M15.5 15.5l2.5 2.5"/></svg>'
                : '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.442-4.362m3.31-2.362A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.442 5.362M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18"/></svg>';
        });
    }

    // Role & field handling
    const roleSelect = document.getElementById("role");
    const vendorFields = document.getElementById("vendorFields");
    const schoolFields = document.getElementById("schoolFields");
    const addressFields = document.getElementById("addressFields");
    const passwordFields = document.getElementById("passwordFields");
    const representativeFields = document.getElementById("representativeFields");
    const showRepresentative = document.getElementById("showRepresentative");

    function toggleFields(role) {
        // Reset semua dulu
        vendorFields.classList.add("hidden");
        schoolFields.classList.add("hidden");
        addressFields.classList.add("hidden");
        passwordFields.classList.add("hidden");

        if (representativeFields) representativeFields.classList.add("hidden");
        if (showRepresentative) {
            showRepresentative.checked = false;
            showRepresentative.parentElement.classList.add("hidden");
        }

        // Lepas tu baru ikut role
        if (role === "vendor") {
            vendorFields.classList.remove("hidden");
            addressFields.classList.remove("hidden");
            passwordFields.classList.remove("hidden");
            if (showRepresentative) showRepresentative.parentElement.classList.remove("hidden");
        } else if (role === "pengguna") {
            addressFields.classList.remove("hidden");
            passwordFields.classList.remove("hidden");
            if (showRepresentative) showRepresentative.parentElement.classList.remove("hidden");
        } else if (role === "sekolah") {
            schoolFields.classList.remove("hidden");
            passwordFields.classList.remove("hidden"); // pastikan password muncul
        }
    }

    if (roleSelect) {
        roleSelect.addEventListener("change", () => {
            toggleFields(roleSelect.value);
        });

        // Run sekali masa load page (supaya default betul-betul ikut selected role)
        toggleFields(roleSelect.value);
    }

    // Wakil institusi toggle
    if (showRepresentative && representativeFields) {
        representativeFields.classList.add("hidden");
        showRepresentative.checked = false;

        showRepresentative.addEventListener("change", () => {
            if (showRepresentative.checked) {
                representativeFields.classList.remove("hidden");
            } else {
                representativeFields.classList.add("hidden");
            }
        });
    }
});
