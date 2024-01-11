import 'box';
import 'animation-click-color.css';
import { toggleClassOnClick } from "toggle-class";

const box: HTMLElement = document.querySelector('.box');
toggleClassOnClick(box, 'colored');
