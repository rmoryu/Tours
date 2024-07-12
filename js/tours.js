// script.js
document.addEventListener('DOMContentLoaded', (event) => {
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');
    const outputDiv = document.getElementById('output');

    startDateInput.addEventListener('change', updateOutput);
    endDateInput.addEventListener('change', updateOutput);

    function updateOutput() {
        const startDate = startDateInput.value;
        const endDate = endDateInput.value;
        
        if (startDate && endDate) {
            outputDiv.textContent = `選擇的日期區間是從 ${startDate} 到 ${endDate}`;
        } else {
            outputDiv.textContent = '';
        }
    }
});
