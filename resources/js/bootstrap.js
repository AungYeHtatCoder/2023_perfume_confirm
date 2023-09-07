import "bootstrap";
import axios from "axios";
import Echo from "laravel-echo";
import Pusher from "pusher-js";
import $ from "jquery"; // Importing jQuery if you are using it.

window.$ = window.jQuery = $; // Setting up jQuery globally
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Setting up Pusher and Echo
window.Pusher = Pusher;

// ... (Your existing imports and other setup code)

window.Echo = new Echo({
    broadcaster: "pusher",
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
});

window.Echo.channel("new-order").listen("NewOrderEvent", (e) => {
    // Update the notification badge
    const existingCount = parseInt($("#new-orders-badge").text(), 10);
    $("#new-orders-badge").text(existingCount + 1);

    // Add new notification to dropdown list
    $("#notification-list").prepend(`
        <a href="javascript:void(0)">
            <div class="media">
                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                <div class="media-body">
                    <h6 class="media-heading">You have a new order!</h6>
                    <p class="notification-text font-small-3 text-muted">${e.order.description}</p>
                    <small><time class="media-meta text-muted" datetime="${e.order.created_at}">${e.order.created_at}</time></small>
                </div>
            </div>
        </a>
    `);
});
