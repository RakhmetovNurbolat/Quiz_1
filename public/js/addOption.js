document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById('add-option');
    const container = document.getElementById('option-container');
    let optionIndex = 1;

    addButton.addEventListener('click', function () {
        const newOptionDiv = document.createElement('div');
        newOptionDiv.innerHTML = `<div class="m-3">
            <input type="radio" name="correct_option" value="${optionIndex}">
            <input type="text" name="options[]">
            <button type="button" class="remove-option" style="background:#0d6efd;color:white;border:none;border-radius:4px;">Удалить</button>
        </div>`;
        container.appendChild(newOptionDiv);
        optionIndex++;

        const removeButtons = document.getElementsByClassName('remove-option');
        for (const button of removeButtons) {
            button.addEventListener('click', function () {
                container.removeChild(newOptionDiv);
            });
        }
    });
});