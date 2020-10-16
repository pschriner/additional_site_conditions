## Example:

```yml
baseVariants:
  - base: https://foo-bar/
    condition: indpEnv.get("HTTP_HOST") == "foo-bar"
```