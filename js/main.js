const swiper = new Swiper(".models-swiper", {
  speed: 400,
  spaceBetween: 29,
  slidesPerView: 4,

  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    769: {
      slidesPerView: 2,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1000: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1201: {
      slidesPerView: 4,
    },
  },
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
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
          result += ") ";
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

let currentModal; // текущее модальное окно
let modalDialog; // белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с предупреждением или благодарностью

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели модальных окон
modalButtons.forEach((button) => {
  /* клик по переключателю */
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* определяем текущее открытое окно */
    currentModal = document.querySelector(button.dataset.target);
    /* открываем текущее окно */
    currentModal.classList.toggle("is-open");
    /* назначаем диалоговое окно */
    modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("mousedown", (event) => {
      /* если клик в пустую область (не диалог) */
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем окно */
        currentModal.classList.remove("is-open");
      }
    });
  });
});
/* ловим событие нажатия на кнопки */
document.addEventListener("keyup", (event) => {
  /* проверяем, что это Escape и текущее окно открыто */
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    /* закрываем текущее окно */
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll(".form-glob"); // Собираем формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .addField("[name=agree]", [
      {
        rule: "required",
        errorMessage: "Необходимо согласиться с правилами проекта",
      },
    ])
    .onSuccess(function (event) {
      formSuccessSend(event);
    });
});

const formMail = document.querySelector("#form");
const validationMail = new JustValidate(formMail, {
  errorFieldCssClass: "is-invalid",
});
validationMail
  .addField("#user-email", [
    {
      rule: "required",
      errorMessage: "Field is required",
    },
    {
      rule: "email",
      errorMessage: "Email is invalid!",
    },
  ])
  .onSuccess(function (event) {
    formSuccessSend(event);
  });

// Функция успешной отправки для всех форм
const formSuccessSend = function (event) {
  const thisForm = event.target; // наща форма
  const formData = new FormData(thisForm); // данные из нашей формы
  const ajaxSend = (formData) => {
    fetch(thisForm.getAttribute("action"), {
      method: thisForm.getAttribute("method"),
      body: formData,
    })
      .then((response) => {
        if (response.ok) {
          thisForm.reset();
          if (currentModal) {
            currentModal.classList.remove("is-open");
          }
          alertModal.classList.add("is-open");
          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");
          /* отслеживаем клик по окну и пустым областям */
          currentModal.addEventListener("mousedown", (event) => {
            /* если клик в пустую область (не диалог) */
            if (!event.composedPath().includes(modalDialog)) {
              /* закрываем окно */
            }
            const modalCloseButton = document.querySelectorAll(
              "[data-toggle=modal-close]"
            );
            modalCloseButton.forEach((button) => {
              button.addEventListener("click", (event) => {
                event.preventDefault();
                currentModal.classList.remove("is-open");
              });
            });
          });
        } else {
          alert("Ошибка: " + response.status);
        }
      })
      .catch((error) => {
        alert(error);
      });
  };
  ajaxSend(formData);
};
