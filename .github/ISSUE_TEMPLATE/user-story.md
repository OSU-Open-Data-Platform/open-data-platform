---
name: User Story
about: For use with the project board. Use this for (ideally user-facing) features
  that can be completed within a sprint.
title: ''
labels: ''
assignees: ''

---

# The Story
As an _, I want to do _, so that I may _.
- Try to include shorter stories in the title, otherwise, write it here and use a short feature name for the title
- If the template would have to be absolutely tortured to fit the story, then you may omit this. Extra care must be given to the requirements in this case.
Example: *As a user, I want to sort datasets by common sortable properties such as size or date, so that I may explore desired datasets more easily*

# Tasks/Steps
- *Very* short/obvious steps may be written in here, anything else should be written into a separate 'task' issue for better tracking/assignment
- Keep them ordered and otherwise indicate dependencies where relevant.
Obvious Example: *(???) not sure right now honestly*
Example: *Create and style drop-down box for user to choose their sort type(s)*

# Definition of Done
- Functional and non-functional requirements that cover accomplishing the feature *and* cleanly integrating it (tests, docs, etc). Should be a task list. 
- Discussion in the Pull Request should be more technical responses to code while discussion here should refer to these higher-level requirements. Things which are/can/should be automated such as linting or passing previous tests do not need specific tasks.
- Closely related requirements (see example) may be AND/OR together to not be ridiculously verbose
- [ ] *Cypress tests are present for drop-down functionality*
- [ ] *All new functions are documented to standard with the rest of the file*
- [ ] *Users can sort dataset query by date/time of initial post or update*
- [ ] *Users can sort dataset query by number of entries or absolute size*
- [ ] *Drop-down should be usable by a screen-reader and follow WCAG guidelines.*
- [ ] *Drop-down should fit the styling of the rest of the page*
- [ ] *Edge cases are considered and covered: what if two entries have the exact same time of post?*

# New Story Approval
- Ideally, the team would consent unanimously before a new story is added. Otherwise, there must be majority consent from those that will work on the component or depend on it. Do make this issue before this, but do not check the box until then!
- [ ] *I have received support from X, Y, Z,*
