import {add,nigeriaStates} from "../../javascript/files.js";

nigeriaStates();
add();


function show (params) {
  if (params === states.value) {
    nigeriaStates.params.classList.remove('hidden');
    unknown.classList.add('hidden');
  }
}


