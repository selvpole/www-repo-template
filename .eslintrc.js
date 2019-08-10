module.exports = {
  extends: [
    "plugin:vue/essential",
    "airbnb-base"
  ],
  rules: {
    "no-param-reassign": [
      "error",
      {
        "props": true,
        "ignorePropertyModificationsFor": [
          "el",
          "pv"
        ]
      }
    ],
    "import/no-extraneous-dependencies": 0,
  },
  env: {
    browser: true,
    jquery: true,
  },
  globals: {
    "Vue": true,
  },
}