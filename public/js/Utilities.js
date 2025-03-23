const Utilities = {
    toastr_(type, title, msg, customOptions = {}) {
        if (typeof toastr === "undefined") {
            throw new Error("toastr is not defined");
        }

        const baseOptions = {
            closeButton: true,
            debug: false,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-right",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        };

        toastr.options = Object.assign({}, baseOptions, customOptions);

        toastr[type](msg, title);
    },
};
