import firebase from "firebase/app";
import "firebase/database";

export default function firebaseMutate(notif) {
    // firebase.initializeApp(firebaseConfig);
    let database = firebase.database();
    let reference = database.ref("/tmc-firebase");
    reference.set(JSON.stringify(notif));
}
