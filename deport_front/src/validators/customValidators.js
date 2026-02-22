import { helpers } from 'vuelidate/lib/validators';
import { validateIdCard } from "@/helpers/helpers/utils";

// Valida que el string contenga únicamente letras, permitiendo acentos, ñ y espacios.
export const alphaOnly = helpers.regex('alphaOnly', /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/);

// Valida que el string contenga únicamente un maximo de letras
export const alphaMax5 = helpers.regex(
  'alphaMax5',
  /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{1,5}$/
);


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

export function acceptedExtensions(value) {
  if (!value) return true; // Permitir vacío si no es requerido
  const allowed = ['.png', '.jpg', '.jpeg', '.svg'];
  if (typeof value === 'string') {
    // Si es base64, extraer extensión
    if (value.startsWith('data:')) {
      const mime = value.split(';')[0].replace('data:', '');
      const ext = {
        'image/png': '.png',
        'image/jpeg': '.jpg',
        'image/jpg': '.jpg',
        'image/svg+xml': '.svg',
      };
      return allowed.includes(ext[mime] || '');
    }
    // Si es una url o nombre de archivo
    return allowed.some(ext => value.toLowerCase().endsWith(ext));
  }
  return false;
}

export function acceptedReglamentoExtensions(value) {
  if (!value) return true; // Permitir vacío si no es requerido
  const allowed = ['.pdf', '.doc', '.docx', '.txt'];
  if (typeof value === 'string') {
    // Si es base64, extraer extensión
    if (value.startsWith('data:')) {
      const mime = value.split(';')[0].replace('data:', '');
      const ext = {
        'application/pdf': '.pdf',
        'application/msword': '.doc',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document': '.docx',
        'text/plain': '.txt',
      };
      return allowed.includes(ext[mime] || '');
    }
    // Si es una url o nombre de archivo
    return allowed.some(ext => value.toLowerCase().endsWith(ext));
  }
  return false;
}