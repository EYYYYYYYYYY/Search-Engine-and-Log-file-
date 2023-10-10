// scripts.js
const searchQueryInput = document.getElementById('searchQuery');
const suggestionsContainer = document.getElementById('suggestions-container');

searchQueryInput.addEventListener('input', () => {
    const query = searchQueryInput.value.trim();

    if (query.length === 0) {
        suggestionsContainer.style.display = 'none'; // Hide the pop-up if the query is empty
        return;
    }

    // Simulated AJAX request for suggestions
    $.ajax({
        url: 'suggest.php',
        method: 'GET',
        data: { query: query },
        success: function(data) {
            if (data.trim() !== '') {
                suggestionsContainer.style.display = 'block'; // Show the pop-up
                suggestionsContainer.innerHTML = data;
            } else {
                suggestionsContainer.style.display = 'none'; // Hide the pop-up if no suggestions
            }
        }
    });
});

// Add a hover event handler for suggestions
suggestionsContainer.addEventListener('mouseover', (e) => {
    if (e.target.classList.contains('suggestion')) {
        // Show the hovering pop-up when hovering over a suggestion
        const popupText = e.target.innerText;
        e.target.title = popupText;
    }
});
