// Define a function to fetch and update notification count
function fetchAndDisplayNotifications() {
    fetch("/admin/fetch-order-notifications")
        .then((response) => response.json())
        .then((data) => {
            // Update the 'new-orders-badge' element with the count
            const badgeElement = document.getElementById("new-orders-badge");
            if (badgeElement) {
                badgeElement.textContent = data.unread_count;
            }
        })
        .catch((error) =>
            console.error("Error fetching notifications:", error)
        );
}

// Fetch notifications initially
fetchAndDisplayNotifications();

// Optionally, keep fetching notifications at intervals (e.g., every 5 seconds)
setInterval(fetchAndDisplayNotifications, 5000);
