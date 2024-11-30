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

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  console.log();
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); //Собираем все формы
//Перебираем каждую форму через foreach
forms.forEach((form) => {
  //создаем новый обьект для проверки
  console.log(form);
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    //проверка поля ввода номера
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
    ])
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
        value: 6,
        errorMessage: "Неполный номер",
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
            if (modal.classList.contains("is-open")) {
              event.preventDefault();
              modal.classList.toggle("is-open");
            }

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
