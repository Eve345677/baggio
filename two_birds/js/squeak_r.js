function responder(id_r) {
    const com = document.getElementById(id_r);
    if (id_r) {
        const ex = com.lastElementChild;
        if (ex.tagName == "FORM") {
            com.removeChild(ex);
        }
        else {
            const form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("style", "width:200%;");
            const textarea = document.createElement("textarea");
            textarea.setAttribute("required", "");
            textarea.setAttribute("class", "form-control");
            textarea.setAttribute("placeholder", "Join the discussion and leave a comment!");
            textarea.setAttribute("rows", "3");
            textarea.setAttribute("style", "resize: none;");
            textarea.setAttribute("name", "respuesta");
            form.appendChild(textarea);
            const br = document.createElement("br");
            form.appendChild(br);
            const input = document.createElement("input");
            input.setAttribute("type", "hidden");
            input.setAttribute("name", "comentid");
            const id = id_r.split("r");
            input.setAttribute("value", id[1]);
            form.appendChild(input);
            const btn = document.createElement("button");
            const texto = document.createTextNode("Responder");
            btn.appendChild(texto);
            btn.setAttribute("type", "submit");
            btn.setAttribute("class", "btn btn-primary");
            btn.setAttribute("style", "cursor:pointer; background-color:#7EBC12;");
            form.appendChild(btn);
            com.appendChild(form);
        }
    }
}