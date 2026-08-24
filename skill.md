---
name: design-system-tyrehub
description: Creates implementation-ready design-system guidance with tokens, component behavior, and accessibility standards. Use when creating or updating UI rules, component specifications, or design-system documentation.
---

<!-- TYPEUI_SH_MANAGED_START -->

# TyreHub

## Mission

Deliver implementation-ready design-system guidance for TyreHub that can be applied consistently across e-commerce storefront interfaces.

## Brand

- Product/brand: TyreHub
- URL: https://www.tyrehub.com/
- Audience: online shoppers and consumers
- Product surface: e-commerce storefront

## Style Foundations

- Visual style: structured, accessible, implementation-first
- Main font style: `font.family.primary=Poppins`, `font.family.stack=Poppins`, `font.size.base=16px`, `font.weight.base=500`, `font.lineHeight.base=19.2px`
- Typography scale: `font.size.xs=0px`, `font.size.sm=14px`, `font.size.md=15px`, `font.size.lg=16px`, `font.size.xl=18px`, `font.size.2xl=20px`, `font.size.3xl=22px`, `font.size.4xl=24px`
- Color palette: `color.surface.muted=#ffffff`, `color.border.default=#2f3672`, `color.text.tertiary=#292929`, `color.text.inverse=#1c1c1c`, `color.surface.base=#000000`, `color.surface.raised=#c1c1c1`, `color.surface.strong=#ffd642`
- Spacing scale: `space.1=3px`, `space.2=5px`, `space.3=7px`, `space.4=10px`, `space.5=14px`, `space.6=15px`, `space.7=20px`, `space.8=25px`
- Radius/shadow/motion tokens: `radius.xs=10px`, `radius.sm=50px` | `motion.duration.instant=200ms`, `motion.duration.fast=300ms`, `motion.duration.normal=1200ms`

## Accessibility

- Target: WCAG 2.2 AA
- Keyboard-first interactions required.
- Focus-visible rules required.
- Contrast constraints required.

## Writing Tone

concise, confident, implementation-focused

## Rules: Do

- Use semantic tokens, not raw hex values in component guidance.
- Every component must define required states: default, hover, focus-visible, active, disabled, loading, error.
- Responsive behavior and edge-case handling should be specified for every component family.
- Accessibility acceptance criteria must be testable in implementation.

## Rules: Don't

- Do not allow low-contrast text or hidden focus indicators.
- Do not introduce one-off spacing or typography exceptions.
- Do not use ambiguous labels or non-descriptive actions.

## Guideline Authoring Workflow

1. Restate design intent in one sentence.
2. Define foundations and tokens.
3. Define component anatomy, variants, and interactions.
4. Add accessibility acceptance criteria.
5. Add anti-patterns and migration notes.
6. End with QA checklist.

## Required Output Structure

- Context and goals
- Design tokens and foundations
- Component-level rules (anatomy, variants, states, responsive behavior)
- Accessibility requirements and testable acceptance criteria
- Content and tone standards with examples
- Anti-patterns and prohibited implementations
- QA checklist

## Component Rule Expectations

- Include keyboard, pointer, and touch behavior.
- Include spacing and typography token requirements.
- Include long-content, overflow, and empty-state handling.

## Quality Gates

- Every non-negotiable rule must use "must".
- Every recommendation should use "should".
- Every accessibility rule must be testable in implementation.
- Prefer system consistency over local visual exceptions.

<!-- TYPEUI_SH_MANAGED_END -->
