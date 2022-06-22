require("./bootstrap");
import React from "react";
import ReactDOM from "react-dom";
import Router from "./Router/Index";
import { BrowserRouter, Route, Link, Switch } from "react-router-dom";

ReactDOM.render(  <BrowserRouter><Router /></BrowserRouter>, document.getElementById("document-root"));
