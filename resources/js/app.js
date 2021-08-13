require("./bootstrap");

import React from "react";
import { render } from "react-dom";
import Routes from "./react/routes/index";

render(<Routes />, document.getElementById("app"));
