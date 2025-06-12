import { helpers } from 'vuelidate/lib/validators';
import { validateIdCard } from "@/helpers/helpers/utils";

// Valida que el string contenga únicamente letras, permitiendo acentos, ñ y espacios.
export const alphaOnly = helpers.regex('alphaOnly', /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/);

// Valida que el string contenga únicamente dígitos.
export const onlyNumbers = helpers.regex('onlyNumbers', /^[0-9]+$/);

// Valida que el campo (en formato CSV) sea una lista de números enteros positivos separados por comas.
// Ejemplo válido: "3,6,9,12,15"
export const positiveIntegerCsv = helpers.withParams(
  { type: 'positiveIntegerCsv' },
  value => {
    if (typeof value !== 'string') return false;
    const trimmed = value.trim();
    if (!trimmed) return false;
    // Separa la cadena por comas y elimina espacios
    const parts = trimmed.split(',').map(part => part.trim());
    if (parts.length === 0) return false;
    return parts.every(part => /^[1-9]\d*$/.test(part));
  }
);

// Valida que el valor sea un arreglo de números enteros positivos.
export const integerArray = helpers.withParams({ type: 'integerArray' }, value => {
  if (!Array.isArray(value)) return false;
  if (value.length === 0) return false;
  // Verifica que cada elemento sea de tipo number, entero y mayor que cero.
  return value.every(
    item => typeof item === 'number' && Number.isInteger(item) && item > 0
  );
});

// Valida que un objeto (tupla) no se intente guardar completamente en blanco;
// es decir, que al menos uno de los valores tenga alguna información.
export const notEmptyTuple = helpers.withParams({ type: 'notEmptyTuple' }, value => {
  if (typeof value !== 'object' || value === null) return false;
  return Object.values(value).some(
    val => val !== null && val !== undefined && String(val).trim() !== ''
  );
});

// Valida la cédula (CI) utilizando la función validateIdCard de utils.js.
export const validCi = helpers.withParams({ type: 'validCi' }, value => {
  return validateIdCard(value);
});

/**
 * Validador que solo permite:
 * - Letras mayúsculas y minúsculas (sin o con acentos)
 * - Números (0-9)
 * - Espacios
 *
 * Esto evita que se ingresen caracteres especiales como !, @, #, etc.
 */
export const noSpecialChars = helpers.regex(
  'noSpecialChars',
  /^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s]+$/
);
