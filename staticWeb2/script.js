// JavaScript file can be used to add interactivity or handle events.
// Currently, this file is empty as this is a static website.
function openTab(tabId) {
    const tabs = document.querySelectorAll('.tab-content');
    const buttons = document.querySelectorAll('.tab-button');

    // Hide all tabs
    tabs.forEach(tab => tab.classList.remove('active'));

    // Remove active class from all buttons
    buttons.forEach(button => button.classList.remove('active'));

    // Show the selected tab
    document.getElementById(tabId).classList.add('active');

    // Add active class to the clicked button
    const clickedButton = Array.from(buttons).find(button => button.getAttribute('onclick').includes(tabId));
    clickedButton.classList.add('active');
}
document.querySelectorAll('.dropdown').forEach(function (menuItem) {
    menuItem.addEventListener('click', function (e) {
        const dropdownMenu = this.querySelector('.dropdown-menu');
        if (dropdownMenu) {
            dropdownMenu.classList.toggle('show');
            e.stopPropagation();
        }
    });
});

// ปิดเมนูเลื่อนลงเมื่อคลิกที่อื่น
document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
        menu.classList.remove('show');
    });
});
