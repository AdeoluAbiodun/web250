document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("fizzbuzzbang-form");
    const resultsDiv = document.getElementById("results");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        // Get user input values
        const name = document.getElementById("name").value;
        const start = parseInt(document.getElementById("start-number").value);
        const end = parseInt(document.getElementById("end-number").value);
        const fizzWord = document.getElementById("fizz-word").value;
        const fizzNum = parseInt(document.getElementById("fizz-number").value);
        const buzzWord = document.getElementById("buzz-word").value;
        const buzzNum = parseInt(document.getElementById("buzz-number").value);
        const bangWord = document.getElementById("bang-word").value;
        const bangNum = parseInt(document.getElementById("bang-number").value);

        // Generate greeting
        let greeting = `Hello, ${name}! Here are your FizzBuzzBang results:`;
        let output = [];

        for (let i = start; i <= end; i++) {
            let result = '';
            if (i % fizzNum === 0) result += fizzWord;
            if (i % buzzNum === 0) result += buzzWord;
            if (i % bangNum === 0) result += bangWord;
            if (result === '') result = i; // If no Fizz, Buzz, or Bang, display the number
            output.push(result);
        }

        // Display results
        resultsDiv.innerHTML = `<h2>${greeting}</h2><pre>${output.join('\n')}</pre>`;
    });
});
