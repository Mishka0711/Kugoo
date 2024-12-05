const butGals = document.querySelectorAll(".button-galka");
const gals = document.querySelectorAll(".client-list-icon-policy");

butGals.forEach((butGal) => {
  butGal.addEventListener("click", (event) => {
    event.preventDefault();
    gals.forEach((gal) => {
      gal.classList.toggle("cl_invisible");
    });
  });
});

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    prevEl: ".steps-slider-button-prev",
    nextEl: ".steps-slider-button-next",
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
      // centeredSlides: true,
      // slidesOffsetBefore: -100,
      // slidesOffsetAfter: 60,
    },
    // when window width is >= 480px
    880: {
      slidesPerView: 2,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

// document.addEventListener("click", (event) => {
//   console.log();
//   if (
//     event.target.dataset.toggle == "modal" ||
//     event.target.parentNode.dataset.toggle == "modal" ||
//     (!event.composedPath().includes(modalDialog) &&
//       modal.classList.contains("is-open"))
//   ) {
//     event.preventDefault();
//     modal.classList.toggle("is-open");
//   }
// });

// document.addEventListener("keyup", (event) => {
//   if (event.key == "Escape" && modal.classList.contains("is-open")) {
//     modal.classList.toggle("is-open");
//   }
// });

let currentModal; //текущее модельное окно
let modalDialog; //белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); //окно с предупреждением
// находим вызыватели или переключатели модальных окон
const modalButtons = document.querySelectorAll("[data-toggle=modal]");

modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    //отмена стандартного поведения при клике
    event.preventDefault();
    //клик по переключателю
    // определяем текущее открытое окно
    currentModal = document.querySelector(button.dataset.target);
    //открываем текущее окно присваивая класс is-open
    currentModal.classList.toggle("is-open");
    //назначаем новое диалоговое окно
    modalDialog = currentModal.querySelector(".modal-dialog");
    modal_to_main = currentModal.querySelector(".mf-btn-thanks");
    console.log(button.dataset.target);
    //отслеживаем события клика внутри диалогового окна, клик по окну и пустым областям
    currentModal.addEventListener("click", (event) => {
      //если клик в пустую область вне окна, закрываем окно удаляя класс
      if (!event.composedPath().includes(modalDialog)) {
        //закрытие окна
        currentModal.classList.remove("is-open");
      }
    });
  });
});

//костыль который при отправке заявки через СТА минуя первую модалку, заранее устанавливает currentModal
const сta_buttons = document.querySelectorAll(".cta-form-button"); //Собираем все кнопки где запускается окно благодарности
сta_buttons.forEach((cta_button) => {
  console.log(cta_button);
  cta_button.addEventListener("click", (event) => {
    currentModal = alertModal;
  });
});

// const staButton = document.querySelector(".cta-form-button");

//отлавливаем событие нажатия на кнопки
document.addEventListener("keyup", (event) => {
  //проверка что это escape и текущее окно открыто( склассом из-опен). Если все ок то окно закрывается
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    event.preventDefault();
    currentModal.classList.toggle("is-open");
  }
});

const phone_forms = document.querySelectorAll(".phone-form"); //Собираем все формы
//const forms = document.querySelectorAll("form"); //Собираем все формы
//Перебираем каждую форму через foreach
phone_forms.forEach((form) => {
  //создаем новый обьект для проверки
  console.log(form);
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    //проверка поля ввода номера
    .addField("[name=userphone]", [
      {
        // если ничего не найдено
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        // если мало символов
        rule: "minLength",
        value: 16,
        errorMessage: "Неполный номер",
      },
    ])
    .addField("[name=policy_checkbox]", [
      {
        rule: "required",
        errorMessage: "Необходимо согласие на обработку перс. данных",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; //Наша форма
      const formData = new FormData(thisForm); //данные из нашей форсы
      const ajaxsend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
          // если ответ 200 то закрываем модалку с полями и от1крываем модалку с подтверждением
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            //у текущего модокна удаляем класс из-опен(делаем невидимым) здесть получается финт, что если идет через 2 модалки то логично что закрывает сначала предыдущую, а если через cta то он просто впустую  отнимает класс которого нет потом снова его присваивая. но думаю сойдет
            currentModal.classList.remove("is-open");
            currentModal = alertModal;
            currentModal.classList.add("is-open");
            modalDialog = currentModal.querySelector(".modal-dialog");
            //отслеживаем события клика внутри диалогового окна, клик по окну и пустым областям

            currentModal.addEventListener("click", (event) => {
              //если клик в пустую область вне окна, закрываем окно удаляя класс
              if (!event.composedPath().includes(modalDialog)) {
                //закрытие окна
                currentModal.classList.remove("is-open");
              }
              if (event.composedPath().includes(modal_to_main)) {
                //возврат к главной странице
                document.location.href = "./index.php";
              }
            });
            // event.preventDefault();
            // currentModal.classList.toggle("is-open");
            // modalThanks.classList.toggle("is-open");
            //document.location.href = "/";
          } else {
            alert(response.statusText);
          }
        });
      };
      ajaxsend(formData);
      console.log(event.target.getAttribute("method"));
    });
});

const mail_forms2 = document.querySelectorAll("#mail-form"); //Собираем все формы
//const forms = document.querySelectorAll("form"); //Собираем все формы
//Перебираем каждую форму через foreach
mail_forms2.forEach((form2) => {
  //создаем новый обьект для проверки
  console.log(form2);
  const validation = new JustValidate(form2, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    //проверка поля ввода почты
    .addField("[name=usermail]", [
      {
        //если ничего не введено
        rule: "required",
        errorMessage: "Укажите почту",
      },
      {
        // если превышено макс символов
        rule: "maxLength",
        value: 20,
        errorMessage: "Максимально 20 символов",
      },
      {
        // если мало символов
        rule: "minLength",
        value: 7,
        errorMessage: "почта от 7 символов",
      },
      {
        rule: "email",
        errorMessage: "Это не похоже на почту",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; //Наша форма
      const formData = new FormData(thisForm); //данные из нашей форсы
      const ajaxsend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
          // если ответ 200 то закрываем модалку с полями и от1крываем модалку с подтверждением
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            //у текущего модокна удаляем класс из-опен(делаем невидимым) здесть получается финт, что если идет через 2 модалки то логично что закрывает сначала предыдущую, а если через cta то он просто впустую  отнимает класс которого нет потом снова его присваивая. но думаю сойдет
            currentModal.classList.remove("is-open");
            currentModal = alertModal;
            currentModal.classList.add("is-open");
            modalDialog = currentModal.querySelector(".modal-dialog");
            //отслеживаем события клика внутри диалогового окна, клик по окну и пустым областям

            currentModal.addEventListener("click", (event) => {
              //если клик в пустую область вне окна, закрываем окно удаляя класс
              if (!event.composedPath().includes(modalDialog)) {
                //закрытие окна
                currentModal.classList.remove("is-open");
              }
              if (event.composedPath().includes(modal_to_main)) {
                //возврат к главной странице
                document.location.href = "./index.php";
              }
            });

            // event.preventDefault();
            // currentModal.classList.toggle("is-open");
            // modalThanks.classList.toggle("is-open");
            //document.location.href = "/";
          } else {
            alert(response.statusText);
          }
        });
      };
      ajaxsend(formData);
      console.log(event.target.getAttribute("method"));
    });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7(";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7(";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7(9";
  }
  /* в других случаях просто 7 (  */
  return "7(";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
// UPD: удалены пробелы у скобок из за которых номер не читался телегой как ссылка
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ")";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
