//Javascript to stop Form Resubmission on Page refresh

if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}