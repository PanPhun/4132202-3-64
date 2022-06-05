import * as firebase from "firebase/app";
import "firebase/messaging";

firebase.initializeApp({
  apiKey: "AIzaSyAPLh7d559eoIFdHOXuL2nt4Ln4p7NJWiU",
  authDomain: "project-6818470792472501272.firebaseapp.com",
  projectId: "project-6818470792472501272",
  storageBucket: "project-6818470792472501272.appspot.com",
  messagingSenderId: "351197219396",
  appId: "1:351197219396:web:f152e212772781cca18a11",
});

let messaging = firebase.messaging();

messaging.onMessage(function (payload) {
  try {
    //try???
    console.log("Message received. ", payload);

    const noteTitle = payload.notification.title;
    const noteOptions = {
      body: payload.notification.body,
      icon: "typewriter.jpg", //this is my image in my public folder
    };

    console.log("title ", noteTitle, " ", payload.notification.body);
    //var notification = //examples include this, seems not needed

    new Notification(noteTitle, noteOptions).onclick = function (event) {
      // console.log(event);
      // console.log(payload.notification.click_action);
      if (
        payload &&
        payload.notification &&
        payload.notification.click_action &&
        payload.notification.click_action.length > 0
      ) {
        window.open(payload.notification.click_action, "_blank");
      }
      this.close();
    };
  } catch (err) {
    console.log("Caught error: ", err);
  }
});

messaging.usePublicVapidKey(
  "BNkv7wsz0F7P036D163uWZlP5bp-yj2XQV3oOgl8CzrmML_m4wHisB_u7B65ed1SFCap8ieYF5E3GiabN2H4Ri0"
);

export { messaging };
