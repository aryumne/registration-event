(function () {
  ZoomMtg.preLoadWasm();
  ZoomMtg.prepareJssdk();

  function beginJoin() {
    var API_KEY = 'zBvo0JrdRJCtPGeVApc92w'; // webinar
    var API_SECRET = '3lSTYJrG9juXav2q2jy9Lgp1nrVtK3Q7xgCV'; // webinar
    var meetingNumber = '81205903149'; //webinar
    var role = 0;
    var userName = 'guest';
    var passWord = '';
    var userEmail = 'bliblipartner@gmail.com';
    var leaveUrl = ' https://www.google.com/#/search';

    // https://us04web.zoom.us/j/74370733029?pwd=dVNES2xNMVVwVHBlM09CeFQwMWcwUT09


    var signature = ZoomMtg.generateSignature({
      meetingNumber: meetingNumber,
      apiKey: API_KEY,
      apiSecret: API_SECRET,
      role: 0,
      success: function (res) {
        console.log(res.result);
      }
    });

    // var signature = document.getElementById('signature');
    // signature = signature.value;

    ZoomMtg.init({
      leaveUrl: leaveUrl,
      isSupportChat: false,
      success: function () {

        ZoomMtg.i18n.load("en-US");
        ZoomMtg.i18n.reload("en-US");

        ZoomMtg.join({
          signature: signature,
          meetingNumber: meetingNumber,
          userName: userName,
          userEmail: userEmail,
          apiKey: API_KEY,
          passWord: passWord,

          success: function (res) {
            // console.log("join meeting success");
            // console.log("get attendeelist");
            ZoomMtg.getAttendeeslist({});
            ZoomMtg.getCurrentUser({
              success: function (res) {
                console.log("success getCurrentUser", res.result.currentUser);
                var ab = document.getElementsByClassName('full-screen-icon');
                var ac = document.getElementById('wc-footer');
                // ab[0].hidden = true;
                // ac.hidden = true;
              },
            });
          },
          error: function (res) {
            console.log(res);
          },
        });
      },
      error: function (res) {
        console.log(res);
      },
    });

    ZoomMtg.inMeetingServiceListener('onUserJoin', function (data) {
      // console.log('inMeetingServiceListener onUserJoin', data);
    });

    ZoomMtg.inMeetingServiceListener('onUserLeave', function (data) {
      // console.log('inMeetingServiceListener onUserLeave', data);
    });

    ZoomMtg.inMeetingServiceListener('onUserIsInWaitingRoom', function (data) {
      // console.log('inMeetingServiceListener onUserIsInWaitingRoom', data);
    });

    ZoomMtg.inMeetingServiceListener('onMeetingStatus', function (data) {
      // console.log('inMeetingServiceListener onMeetingStatus', data);
    });
  }
  beginJoin();
})();
