import axios from "axios";
let preffix = "/game";

export default {
    create () {
        return axios.get (preffix+"/create");
    },
};