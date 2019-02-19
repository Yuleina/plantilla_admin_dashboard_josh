/**
 * Created by user on 27/7/16.
 */
$(document).ready(function () {
    //Square blue color scheme for iCheck
    $('input[type="checkbox"].square-blue').iCheck({
        checkboxClass: 'icheckbox_square-blue'
    });

    $("#authentication").bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            usuario: {
                validators: {
                    notEmpty: {
                        message: 'Usuario requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 15,
                        message: 'El usuario debe tener 6 caracteres o menos de 16',
                    },
                    // regexp: {
                    //     regexp: /^[a-zA-Z0-9_]+$/,
                    //     message: 'El valor de este campo debe ser alfanumerico',
                    // }
                },
                contrasena: {
                    validators: {
                        notEmpty: {
                            message: 'Contraseña requerida',
                        },
                    }
                }
            }

        }
    });
    $("#reset_pw").bootstrapValidator({
        fields: {
            username2: {
                validators: {
                    notEmpty: {
                        message: 'A registered email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });

    $("#register_here").bootstrapValidator({
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'First name is required'
                    }
                },
                required: true,
                minlength: 3
            },
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'Last name is required'
                    }
                },
                required: true,
                minlength: 3
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            email_confirm: {
                validators: {
                    notEmpty: {
                        message: 'The confirm email address is required'
                    },
                    identical: {
                        field: 'email',
                        message: 'Entered email is not matching with your email'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    different: {
                        field: 'first_name,last_name',
                        message: 'Password should not match first or last name'
                    }
                }
            },
            password_confirm: {
                validators: {
                    notEmpty: {
                        message: 'Confirm Password is required'
                    },
                    identical: {
                        field: 'password'
                    },
                    different: {
                        field: 'first_name,last_name',
                        message: 'Confirm Password should match with password'
                    }
                }
            }
        }
    });

});
