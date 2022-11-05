var notificationsWrapper = $('.dropdown-notification');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('#data-count');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('li.scrollable-container');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('new-notification');

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NewNotification', function (data) {
    var existingNotifications = notifications.html();


    var newNotificationHtml =`<a href="javascript:void(0)">
    <div class="media">
        <div class="media-left align-self-center"><i
                class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
        <div class="media-body">
            <h6 class="media-heading">`+ data.vendorName +`تم ارسال رسالة بواسطة </h6>
            <p class="notification-text font-small-3 text-muted">`+data.message+`.</p>
            <small>
                <time class="media-meta text-muted"
                     `+data.date+ date.time+`
                </time>
            </small>
        </div>
    </div>
</a>
 `;

    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();




 });
