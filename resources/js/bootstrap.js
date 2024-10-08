import Echo from 'laravel-echo';
import pusherJs from 'pusher-js'
window.Pusher = pusherJs

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'local',
    wsHost: window.location.hostname,
    wsPort: 6001,
    wssPort: 6001,
    cluster : 'mt1',
    forceTLS: false,
    encrypted: false,
    disableStats: false,
    enabledTransports: ['ws', 'wss'],
});