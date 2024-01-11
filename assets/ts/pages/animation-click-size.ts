import 'box';
import '../../styles/pages/animation-click-size.css';
import { toggleClassOnClick } from "toggle-class";

const box: HTMLElement = document.querySelector('.box');
toggleClassOnClick(box, 'sized');
