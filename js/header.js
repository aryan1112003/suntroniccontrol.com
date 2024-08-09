// Get the theme toggle button
const themeToggle = document.querySelector('.theme-toggle');

// Get the header element
const header = document.querySelector('.header');

// Check if the user has previously selected a theme
if (localStorage.getItem('theme') === 'light') {
    header.classList.add('light-mode');
} else {
    header.classList.remove('light-mode');
}

// Add an event listener to the theme toggle button
themeToggle.addEventListener('click', () => {
    // Toggle the light-mode class on the header element
    header.classList.toggle('light-mode');

    // Save the user's theme preference to local storage
    if (header.classList.contains('light-mode')) {
        localStorage.setItem('theme', 'light');
    } else {
        localStorage.setItem('theme', 'dark');
    }
});