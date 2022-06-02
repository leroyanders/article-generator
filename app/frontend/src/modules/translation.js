import React from 'react';
import i18n from "i18next";
import { useTranslation, initReactI18next } from "react-i18next";

i18n
  .use(initReactI18next) // passes i18n down to react-i18next
  .init({
    resources: {
      en: {
        translation: {
          "Welcome to React": "Welcome to React and react-i18next"
        }
      },
      de: {
        translation: {
          "Welcome to React": "Hallo to React und react-i18next"
        }
      }
    },
    lng: localStorage.getItem('language'),
    fallbackLng: "en",

    interpolation: {
      escapeValue: false
    }
});

const useLanguage = (language) => {
  i18n.changeLanguage(language);
  localStorage.setItem('language', language);
}

const Translation = ({children}) => {
    const { t } = useTranslation();
    return t(children);
}

export {useLanguage}
export default Translation;