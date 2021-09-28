//EXPRESIONES
expresionCaracteresAlfabeticos = /^[a-zA-Z]+$/
expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
exprSoloNumeros = /^[0-9]+$/


//LOGIN


function ValidarLogin(username, password) {
    datos = [];
    if (username != "") {
        if (password != "") {
            let correoValidado = ValidarCorreo(username);
            if (correoValidado == true) {
                if (password.length >= 6 && password.length <= 20) {
                    datos = [true, ""];
                } else {
                    datos = [false, "La contraseña tiene que tener minimo 6 caracteres y maximo 20"]
                }
            } else {
                datos = [false, "El correo no cumple con las caracteristicas de un correo"]
            }
        } else {
            datos = [false, "El campo Contraseña no puede estar vacio"]
        }
    } else {
        datos = [false, "El campo Usuario no puede estar vacio"];
    }
    return datos;
}

//funciones de validaciones

function ContarDigitosNumero(numero) {
    return numero.toString().length
}

function ValidarCorreo(correo) {
    if (expr.test(correo)) {
        return true;
    } else {
        return false;
    }
}

function ValidarCaracteresAlfabeticos(cadena) {
    if (expresionCaracteresAlfabeticos.test(cadena)) {
        return true;
    } else {
        return false;
    }
}

function ValidarSoloNumeros(cadena) {
    if (exprSoloNumeros.test(cadena)) {
        return true;
    } else {
        return false;
    }
}

function VerificarExistenciaServicio(servicio) {
    let resultado; let i = 0; let encontro = false;
    servicios = ['Servicio', 'Reparación', 'Mantenimiento', 'Limpieza', 'Auditoría', 'Asesoría', 'Mensajería',
        'Telefonía', 'Aseguradora', 'Gestoría', 'Agua', 'Gas', 'Telecomunicación', 'Electricidad', 'Bancos', 'Plomería',
        'Diseño', 'Programación', 'Organización de eventos', 'Funeraria', 'Hotel', 'Cine', 'Discoteca', 'Restaurante', 'Ventas',
        'Servicios'
    ];
    while (i < servicios.length && encontro == false) {
        if (servicio == servicios[i]) {
            resultado = true;
            encontro = true;
        }
        else {
            resultado = false;
            i++;
        }
    }
    return resultado;
}

function VerificarExistenciaSectores(sector) {
    let resultado; let i = 0; let encontro = false;
    sectores = ['Ventas',
        'Comercial',
         'CallCenter',
         'Telemercadeo',
         'Almacen',
         'Logistica',
         'Atención al cliente',
         'Soporte',
         'Oficina',
         'Administracion',
         'Informatica',
         'Telecomunicaciones',
         'Salud',
         'Reparaciones tecnicas',
         'Mantenimiento',
         'Contabilidad',
         'Finanzas',
         'Servicios generales',
         'Aseos',
         'Ingenieria',
         'Energia',
        'Quimica',
         'Recursos Humanos',
         'Arquitectura',
         'Construcciones',
         'Publicidad',
         'Mercadeo',
         'Hoteleria',
         'Educacion',
         'Diseño',
         'Direccion gerencial',
         'Transporte',
         'Cuidado del hogar',
         'Otros',
    ];
    while (i < sectores.length && encontro == false) {
        if (sector == sectores[i]) {
            resultado = true;
            encontro = true;
        }
        else {
            resultado = false;
            i++;
        }
    }
    return resultado;
}
function VerificarExistenciaHorario(horario) {
    let resultado; let i = 0; let encontro = false;
    horarios = ['Regular',
        'Flexible',
        'Intensivo',
        'Fines de semana',
        'Nocturno'        
    ];
    while (i < horarios.length && encontro == false) {
        if (horario == horarios[i]) {
            resultado = true;
            encontro = true;
        }
        else {
            resultado = false;
            i++;
        }
    }
    return resultado;
}

function VerificarExistenciaTipoContrato(tipoContrato) {
    let resultado; let i = 0; let encontro = false;
    contratos = [
        'Tiempo completo',
        'Medio tiempo',
        'Obra/Labor',
        'Pasantía',
        'Por horas',
    ];
    while (i < contratos.length && encontro == false) {
        if (tipoContrato == contratos[i]) {
            resultado = true;
            encontro = true;
        }
        else {
            resultado = false;
            i++;
        }
    }
    return resultado;
}


//FORMULARIO REGISTRAR EMPRESA

function ValidarRegistroEmpresa(nombre, foto, nit, servicio, direccion, telefono, correo, contraseña) {
    respuestaRegistroEmpresa = [];
    if (nombre != "") {
        if (nombre.length >= 1 && nombre.length <= 50) {
            let nombreAlfabetico = ValidarCaracteresAlfabeticos(nombre);
            if (nombreAlfabetico == true) {
                if (foto != "") {
                    if (foto.length > 0 && foto.length <= 500) {
                        if (nit != "") {
                            let DigitosNitContados = ContarDigitosNumero(nit);
                            if (DigitosNitContados == 10) {
                                let NitSoloNumero = ValidarSoloNumeros(nit);
                                if (NitSoloNumero) {
                                    let validarExistenciaServicio = VerificarExistenciaServicio(servicio);
                                    if (validarExistenciaServicio) {
                                        if (direccion != "") {
                                            if (direccion.length > 0 && direccion.length <= 100) {
                                                if (telefono != "") {
                                                    let SoloNumeroTelefono = ValidarSoloNumeros(telefono);
                                                    if (SoloNumeroTelefono) {
                                                        let contarDigitosTelefono = ContarDigitosNumero(telefono);
                                                        if (contarDigitosTelefono == 10) {
                                                            if (correo != "") {
                                                                validarCorreo = ValidarCorreo(correo);
                                                                if (validarCorreo) {
                                                                    if (contraseña != "") {
                                                                        if (contraseña.length >= 6 && contraseña.length <= 20) {
                                                                            respuestaRegistroEmpresa = [true, ""];
                                                                        } else {
                                                                            respuestaRegistroEmpresa = [false, "La contraseña tiene que tener minimo 6 caracteres y maximo 20"]
                                                                        }
                                                                    } else {
                                                                        respuestaRegistroEmpresa = [false, "El campo de la contraseña no puede estar vacio"]

                                                                    }
                                                                } else {
                                                                    respuestaRegistroEmpresa = [false, "Introduzca correctamente el correo"];

                                                                }
                                                            } else {
                                                                respuestaRegistroEmpresa = [false, "El campo correo no puede estar vacio"];
                                                            }
                                                        } else {
                                                            respuestaRegistroEmpresa = [false, "El campo telefono tiene que ser de 10 digitos"];
                                                        }
                                                    } else {
                                                        respuestaRegistroEmpresa = [false, "El campo telefono solo puede tener numeros"];
                                                    }
                                                } else {
                                                    respuestaRegistroEmpresa = [false, "El campo telefono no puede estar vacio"];

                                                }

                                            } else {
                                                respuestaRegistroEmpresa = [false, "La direccion tiene que tener minimo 1 caracter y maximo 100"];
                                            }
                                        } else {
                                            respuestaRegistroEmpresa = [false, "El campo direccion no puede estar vacio"];
                                        }
                                    } else {
                                        respuestaRegistroEmpresa = [false, "Seleccione el servicio correcto"];
                                    }

                                } else {
                                    respuestaRegistroEmpresa = [false, "Solo se aceptan numeros en el nit"];
                                }
                            } else {
                                respuestaRegistroEmpresa = [false, "El nit de la empresa tiene que ser de 10 Digitos"];
                            }
                        } else {
                            respuestaRegistroEmpresa = [false, "El nit no puede estar vacio"];
                        }
                    } else {
                        respuestaRegistroEmpresa = [false, "El rango de la foto excede el limite permitido"];
                    }
                } else {
                    respuestaRegistroEmpresa = [false, "El campo de la foto no puede estar vacio"];
                }

            } else {
                respuestaRegistroEmpresa = [false, "El campo Nombre no puede contener numeros, ni caracteres especiales"];
            }
        } else {
            respuestaRegistroEmpresa = [false, "El nombre tiene que tener minimo 1 caracter y maximo 50"];
        }
    } else {
        respuestaRegistroEmpresa = [false, "El campo Nombre no puede estar vacio"];
    }
    return respuestaRegistroEmpresa;
}



//FORMULARIO REGISTRAR PROFESSIONAL

function ValidarRegistroProfesional(identidad, foto, nombre, apellido, direccion, telefono,correo,contraseña) {
    respuestaRegistroProfesional = [];
    if (identidad != "") {
        if (identidad.length == 10) {
            if (ValidarSoloNumeros(identidad)) {
                if (foto != "") {
                    if (foto.length > 0 && foto.length <= 500) {
                        if (nombre != "") {
                            if (nombre.length > 0 && nombre.length <= 30) {
                                if (ValidarCaracteresAlfabeticos(nombre)) {
                                    if (apellido != "") {
                                        if (apellido.length > 0 && apellido.length <= 30) {
                                            if (ValidarCaracteresAlfabeticos(apellido)) {
                                                if (direccion != "") {
                                                    if (direccion.length > 0 && direccion.length <= 100) {
                                                       if(telefono != ""){
                                                        if (telefono.length == 10) {
                                                            if (ValidarSoloNumeros(telefono)) {
                                                                if(correo != ""){
                                                                    if(ValidarCorreo(correo)){
                                                                        if(contraseña != ""){
                                                                            if(contraseña.length >= 6 && contraseña.length <= 20){
                                                                                respuestaRegistroProfesional = [true, ""]
                                                                            }else{
                                                                                respuestaRegistroProfesional = [false, "La contraseña tiene que ser como minimo 6 caracteres y maximo 20"]
                                                                            }
                                                                        }else{
                                                                            respuestaRegistroProfesional = [false, "La contraseña no puede estar vacia"]
                                                                        }
                                                                    }else{
                                                                        respuestaRegistroProfesional = [false, "Verifique que el correo cumpla con el formato"]
                                                                    }
                                                                }else{
                                                                    respuestaRegistroProfesional = [false, "El correo no puede estar vacio"]
                                                                }
                                                            } else {
                                                                respuestaRegistroProfesional = [false, "El telefono solo puede tener numeros"]
                                                            }
                                                        } else {
                                                            respuestaRegistroProfesional = [false, "El telefono tiene que ser de 10 digitos"]
                                                        }
                                                       }else{
                                                        respuestaRegistroProfesional = [false, "El telefono no puede estar vacio"]
                                                       }
                                                    } else {
                                                        respuestaRegistroProfesional = [false, "La direccion no puede contener mas de 100 caracteres"]
                                                    }
                                                } else {
                                                    respuestaRegistroProfesional = [false, "La direccion no puede estar vacia"]
                                                }
                                            } else {
                                                respuestaRegistroProfesional = [false, "El apellido no puede contener numeros"]
                                            }
                                        } else {
                                            respuestaRegistroProfesional = [false, "El apellido no puede contener mas de 30 caracteres"]
                                        }
                                    } else {
                                        respuestaRegistroProfesional = [false, "El apellido no puede estar vacio"]
                                    }
                                } else {
                                    respuestaRegistroProfesional = [false, "El nombre no puede contener numeros"]
                                }
                            } else {
                                respuestaRegistroProfesional = [false, "El nombre no puede contener mas de 30 caracteres"]
                            }
                        } else {
                            respuestaRegistroProfesional = [false, "El nombre no puede estar vacio"]
                        }
                    } else {
                        respuestaRegistroProfesional = [false, "El campo de la foto no puede ser mayor a 500 caracteres"]
                    }

                } else {
                    respuestaRegistroProfesional = [false, "El campo de la foto no puede estar vacio"]
                }

            } else {
                respuestaRegistroProfesional = [false, "El campo identidad solo puede contener numeros"]
            }
        } else {
            respuestaRegistroProfesional = [false, "El campo identidad tiene que ser de 10 digitos"]
        }
    } else {
        respuestaRegistroProfesional = [false, "El campo identidad no puede estar vacio"]
    }
    return respuestaRegistroProfesional;
}

function ValidarCrearOferta(cargo,vigencia,numeroAplicantes,descripcion, sector, tipoContrato, salario, horario, condiciones){
   respuestaCrearOferta = [];
    if(cargo != ""){
        if (cargo.length >= 1 && cargo.length <=250) {
            if ( ValidarCaracteresAlfabeticos(cargo)) {
                formatoFecha = Date.parse(vigencia)
                if (!isNaN(formatoFecha)) {
                    if (vigencia != "") {
                        if (numeroAplicantes != "") {
                            if (numeroAplicantes > 0) {
                                if (ValidarSoloNumeros(numeroAplicantes)) {
                                    if (descripcion != "") {
                                        if (descripcion.length >= 1 && descripcion.length <= 500) {
                                            if (sector != null) {
                                                if (VerificarExistenciaSectores(sector)) {
                                                    if (VerificarExistenciaTipoContrato(tipoContrato)) {
                                                      if (tipoContrato != "") {
                                                        if (salario > 0) {
                                                            if (ValidarSoloNumeros(salario)) {
                                                                if (salario != "") {
                                                                    if (condiciones != "") {
                                                                        if (condiciones.length >= 1 && condiciones.length <=200) {
                                                                            if (VerificarExistenciaHorario(horario)) {
                                                                                if (horario != "") {
                                                                                    respuestaCrearOferta = [true,""]
                                                                                } else {
                                                                                    respuestaCrearOferta = [false, "El campo horario no puede quedar vacio"]

                                                                                }
                                                                            } else {
                                                                                respuestaCrearOferta = [false, "El horario que desea registrar no existe en la lista"]

                                                                            }
                                                                        } else {
                                                                            respuestaCrearOferta = [false, "Las condiciones no puede ser mayor a 200 caracteres"]
                                                                        }
                                                                    } else {
                                                                        respuestaCrearOferta = [false, "El campo de las condiciones no puede quedar vacio"]
                                                                       
                                                                    }
                                                                } else {
                                                                    respuestaCrearOferta = [false, "Verifique que el salario no este vacio"]
                                                                }
                                                                
                                                            } else {
                                                                respuestaCrearOferta = [false, "El salario no puede contener caracteres. Solo numeros"]
                                                            }
                                                        } else {
                                                            respuestaCrearOferta = [false, "Verifique que el salario sea mayor que 0"]
                                                        }
                                                      } else {
                                                        respuestaCrearOferta = [false, "Verifique que el tipo de contrato no puede quedar vacio"]
                                                      }
                                                    } else {
                                                        respuestaCrearOferta = [false, "Verifique que el tipo de contrato que digito se encuentre en la lista de tipo de contratos"]
                                                    }
                                                } else {
                                                    respuestaCrearOferta = [false, "Verifique que el sector que digito se encuentre en la lista de sectores"]
                                                }
                                            } else {
                                                respuestaCrearOferta = [false, "Verifique que el sector no se encuentre vacio"]
                                            }
                                        } else {
                                            respuestaCrearOferta = [false, "Verifique que la descripcion tenga un rango de caracteres de 1 a 500"]
                                        }
                                    } else {
                                        respuestaCrearOferta = [false, "Verifique que la descripcion no se encuentre vacia."]
                                    }
                                } else {
                                    respuestaCrearOferta = [false, "El numero de aplicantes no puede contener caracteres"]
                                }
                            } else {
                                respuestaCrearOferta = [false, "El numero de aplicantes tiene que ser mayor que 0"]
                            }
                        } else {
                            respuestaCrearOferta = [false, "Tiene que especificar el numero de aplicantes, no puede quedar vacio"]
                        }
                    } else {
                        respuestaCrearOferta = [false, "Tiene que selecciona la fecha de vigencia"]
                    }
                } else {
                    respuestaCrearOferta = [false, "La fecha no cumple con el formato, verifique que seleccione la fecha bien"]
                }
            } else {
                respuestaCrearOferta = [false, "El campo del cargo no puede contener numeros"]
            }
        } else {
            respuestaCrearOferta = [false, "El campo del cargo tiene que tener como minimo 1 caracter y como maximo 250"]

        }
    }else{
        respuestaCrearOferta = [false, "El campo del cargo no puede quedar vacio"]
    }

    return respuestaCrearOferta;

}




