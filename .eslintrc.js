module.exports = {
    "env": {
        "browser": true,
        "es6": true
    },
    "extends": [
        "eslint:recommended",
        "plugin:vue/recommended"
    ],
    "globals": {
        "Atomics": "readonly",
        "SharedArrayBuffer": "readonly"
    },
    "parserOptions": {
        "ecmaVersion": 2018,
        "sourceType": "module"
    },
    "plugins": [
        "vue"
    ],
    "rules": {
      "quotes": ["warn", "single"],
      "vue/max-attributes-per-line": ["warn", {
        "singleline": 3,
        "multiline": {
          "max": 1,
          "allowFirstLine": false
        }
      }]
    }
};
