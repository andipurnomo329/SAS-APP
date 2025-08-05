 // Dropdown Cehklist
    function checkAllUniversal(masterCheckbox) {
        const group = masterCheckbox.getAttribute('data-checkall');
        const checkboxes = document.querySelectorAll('input[data-group="' + group + '"]');
        checkboxes.forEach(cb => cb.checked = masterCheckbox.checked);
        updateDropdownLabel(group);
    }

    function updateDropdownLabel(group) {
        const selected = [];
        document.querySelectorAll('input[data-group="' + group + '"]:checked').forEach(cb => {
            selected.push(cb.value);
        });

        const btn = document.querySelector('[data-label="' + group + '"]');
        const all = document.querySelectorAll('input[data-group="' + group + '"]').length;

        if (selected.length === 0) {
            btn.textContent = 'Pilih ' + capitalize(group);
        } else if (selected.length === all) {
            btn.textContent = 'Semua ' + capitalize(group) + ' Dipilih';
        } else {
            btn.textContent = selected.join(', ');
        }
    }

    function capitalize(text) {
        return text.charAt(0).toUpperCase() + text.slice(1);
    }

    document.querySelectorAll('input[type="checkbox"][data-group]').forEach(cb => {
        cb.addEventListener('change', function() {
            const group = cb.getAttribute('data-group');
            updateDropdownLabel(group);
        });
    });

    // End Dropdown Cehklist