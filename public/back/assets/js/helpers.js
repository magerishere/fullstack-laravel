const showSuccessFulNotification = () => {
    $.notify({
        title: "Update Complete : ",
        message: "Something cool is just updated!",
        icon: 'fa fa-check'
    }, {
        type: "info"
    });
}
