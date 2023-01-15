(function(document) {
    const rolesWrapper = document.querySelector('.ybug-roles-wrapper');
    const roleChks = document.querySelectorAll('input[name="ybug[roles][]"]');
    const restrictAccess = document.querySelectorAll('input[name="ybug[restrict_access]"]');
    
    restrictAccess.forEach((el) => {
        el.addEventListener('change', () => {
            const enableRoles = el.value === 'roles' && el.checked;
            roleChks.forEach((chk) => {
                chk.disabled = !enableRoles;
            });
            rolesWrapper.classList.toggle('is-disabled', !enableRoles);
        });
    });
})(document);