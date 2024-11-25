(function () {
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", setupAjaxForms);
  } else {
    setupAjaxForms();
  }

  function setupAjaxForms() {
    document.querySelectorAll("form.ajax-form").forEach((form) => {
      const action = form.action;

      const {
        recaptchaAction,
        recaptchaKey,
        successTemplateSelector,
        errorTemplateSelector,
      } = form.dataset;

      console.assert(
        recaptchaAction,
        "You must supply a recaptcha action using data-recaptcha-action"
      );
      console.assert(
        recaptchaKey,
        "You must supply a recaptcha key using data-recaptcha-key"
      );
      console.assert(
        successTemplateSelector,
        "You must supply a success template selector action using data-success-template-selector"
      );
      console.assert(
        errorTemplateSelector,
        "You must supply an error template selector action using data-error-template-selector"
      );

      console.assert(grecaptcha, "The recaptcha script must be included");

      form.addEventListener("submit", function (evt) {
        evt.preventDefault();

        grecaptcha.ready(async () => {
          const token = await grecaptcha.execute(recaptchaKey, {
            action: recaptchaAction,
          });

          const body = getFormBody(form);

          // body.recaptchaResponse = token;
          body.append("recaptchaResponse", token);
          body.append("recaptchaAction", recaptchaAction);

          // const json = JSON.stringify(body);

          await fetch(action, {
            method: "POST",
            body: body,
          })
            .then((response) => response.json())
            .then((response) => {
              if (response.success) {
                showFormSuccessMessage(form, successTemplateSelector);
              } else {
                showFormError(response);
              }
            })
            .catch((err) => console.log(err));
        });
      });
    });
  }

  /**
   * Gets and object of all names and values of all input fields in the form.
   *
   * This method woks by iterating through all the input, select and textarea elements
   * in the form and returning a dictionary of their values by name. `[name]: value`.
   *
   * If an element does not have a name or a value, then it is omitted from the returned
   * dictionary.
   *
   * Note that checkboxes are handled differently. The value added to the dictionary for
   * checkbox inputs is a boolean value of whether the input is checked or not.
   * @param {HTMLFormElement} form The form.
   * @returns A dictionary of form field values by name.
   */
  function getFormBody(form) {
    const body = new FormData();

    const formInputs = form.querySelectorAll("input,select,textarea");

    for (const input of formInputs) {
      // The input needs a name or else we won't have anything to add to the body.
      if (!input.name) {
        continue;
      }

      if (input.type === "checkbox") {
        body.append(input.name, input.checked);
      } else if (input.value) {
        body.append(input.name, input.value);
      }
    }

    return body;
  }

  function showFormSuccessMessage(form, successTemplateSelector) {
    const template = document
      .querySelector(successTemplateSelector)
      .content.cloneNode(true);

    emptyNode(form);

    form.append(template);
  }

  async function showFormError(response) {
    alert(response.error);
  }

  /**
   * Remove all child elements from a DOM node.
   * @param {HTMLElement} node The node to empty
   */
  function emptyNode(node) {
    while (node.lastChild) {
      node.removeChild(node.firstChild);
    }
  }
})();
