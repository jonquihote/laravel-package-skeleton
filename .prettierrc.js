module.exports = {
    printWidth: 80,
    tabWidth: 4,
    useTabs: false,
    semi: false,
    singleQuote: true,
    trailingComma: 'es5',

    overrides: [
        {
            files: '*.yaml',
            options: {
                tabWidth: 2,
            },
        },
    ],
}
