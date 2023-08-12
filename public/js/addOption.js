document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById('add-question');
    const container = document.getElementById('questions-container');
    let questionIndex = 0;

    addButton.addEventListener('click', function () {
        const questionDiv = document.createElement('div');
        questionDiv.innerHTML = `
            <label for="questions[${questionIndex}][text]">Вопрос ${questionIndex + 1}:</label>
            <input type="text" name="questions[${questionIndex}][text]" required>
            <div class="options-container">
                <label>Варианты ответов:</label>
                <div class="m-3">
                    <input type="radio" name="questions[${questionIndex}][correct_option]" value="0">
                    <input type="text" name="questions[${questionIndex}][options][]">
                </div>
            </div>
            <button type="button" class="add-option" style="background:#0d6efd;color:white;border-radius:4px;">Добавить вариант ответа</button>
            <hr>
        `;
        container.appendChild(questionDiv);
        questionIndex++;

        const optionsContainer = questionDiv.querySelector('.options-container');
        const addOptionButton = questionDiv.querySelector('.add-option');
        addOptionButton.addEventListener('click', function () {
            const optionDiv = document.createElement('div');
            optionDiv.innerHTML = `
                <div class="m-3">
                    <input type="radio" name="questions[${questionIndex - 1}][correct_option]" value="${optionsContainer.childElementCount}">
                    <input type="text" name="questions[${questionIndex - 1}][options][]">
                    <button type="button" class="remove-option" style="background:#0d6efd;color:white;border-radius:4px;">Удалить</button>
                </div>
            `;
            optionsContainer.appendChild(optionDiv);

            const removeOptionButton = optionDiv.querySelector('.remove-option');
            removeOptionButton.addEventListener('click', function () {
                optionsContainer.removeChild(optionDiv);
            });
        });
    });
});