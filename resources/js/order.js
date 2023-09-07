import Echo from "laravel-echo";
import Pusher from "pusher-js";
import axios from "axios";

// Axios setup
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Setting up Pusher and Echo
window.Pusher = Pusher;
window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY, // Updated for Vite
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER, // Updated for Vite
    encrypted: true,
});

// Listening for new orders
window.Echo.channel("new-order").listen("NewOrderEvent", (e) => {
    // Update the notification badge
    const badgeElement = document.querySelector("#new-orders-badge");
    if (badgeElement) {
        const existingCount = parseInt(badgeElement.textContent, 10);
        badgeElement.textContent = existingCount + 1;
    }

    // Add new notification to dropdown list
    const notificationList = document.querySelector("#notification-list");
    if (notificationList) {
        const anchor = document.createElement("a");
        anchor.href = "javascript:void(0)";

        const mediaDiv = document.createElement("div");
        mediaDiv.className = "media";

        const mediaLeftDiv = document.createElement("div");
        mediaLeftDiv.className = "media-left align-self-center";

        const icon = document.createElement("i");
        icon.className = "ft-plus-square icon-bg-circle bg-cyan mr-0";

        mediaLeftDiv.appendChild(icon);

        const mediaBodyDiv = document.createElement("div");
        mediaBodyDiv.className = "media-body";

        const heading = document.createElement("h6");
        heading.className = "media-heading";
        heading.textContent = "You have a new order!";

        const para = document.createElement("p");
        para.className = "notification-text font-small-3 text-muted";
        para.textContent = e.order.description;
        console.log(e.order.description);
        const timeElement = document.createElement("time");
        timeElement.className = "media-meta text-muted";
        timeElement.setAttribute("datetime", e.order.created_at);
        timeElement.textContent = e.order.created_at;

        const small = document.createElement("small");
        small.appendChild(timeElement);

        mediaBodyDiv.appendChild(heading);
        mediaBodyDiv.appendChild(para);
        mediaBodyDiv.appendChild(small);

        mediaDiv.appendChild(mediaLeftDiv);
        mediaDiv.appendChild(mediaBodyDiv);

        anchor.appendChild(mediaDiv);

        notificationList.prepend(anchor);
    }
});
