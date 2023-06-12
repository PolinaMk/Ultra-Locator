const titleFind = document.querySelector(".advantage__title-find");
const titleShare = document.querySelector(".advantage__title-share");
const titleProtect = document.querySelector(".advantage__title-protect");

const textFind = document.querySelector(".advantage__text-find");
const textShare = document.querySelector(".advantage__text-share");
const textProtect = document.querySelector(".advantage__text-protect");

titleShare.addEventListener("click", () => {
    titleShare.classList.add("advantage__title-active");
    textShare.classList.remove("advantage__text-inactive");
    titleFind.classList.remove("advantage__title-active");
    textFind.classList.add("advantage__text-inactive");
    titleProtect.classList.remove("advantage__title-active");
    textProtect.classList.add("advantage__text-inactive");
});

titleFind.addEventListener("click", () => {
    titleFind.classList.add("advantage__title-active");
    textFind.classList.remove("advantage__text-inactive");
    titleShare.classList.remove("advantage__title-active");
    textShare.classList.add("advantage__text-inactive");
    titleProtect.classList.remove("advantage__title-active");
    textProtect.classList.add("advantage__text-inactive");
});

titleProtect.addEventListener("click", () => {
    titleProtect.classList.add("advantage__title-active");
    textProtect.classList.remove("advantage__text-inactive");
    titleFind.classList.remove("advantage__title-active");
    textFind.classList.add("advantage__text-inactive");
    titleShare.classList.remove("advantage__title-active");
    textShare.classList.add("advantage__text-inactive");
});