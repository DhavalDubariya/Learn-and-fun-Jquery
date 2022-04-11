# jQuery

    => jQuery is a JavaScript Library.

# jQuery Syntax

    => $(selector).action()

# jQuery Selectors

    => $("\*") :- Selects all elements

    => $(this) :- Selects the current HTML element

    => $("p.intro") :- Selects all "p" elements with class="intro"

    => $("p:first") :- Selects the first "p" element

    => $("ul li:first") :- Selects the first "li" element of the first "ul"

    => $("ul li:first-child") :- Selects the first "li" element of the first "ul"

    => $("[href]") :- Selects all elements with an href attribute

    => $("a[target='_blank']") :- Selects all "a" elements with a target attribute value equal to
    "\_blank"

    => $("a[target!='_blank']") :- Selects all "a" elements with a target attribute value NOT equal
    to "\_blank"

    => $(":button") :- Selects all "button" elements and "input" elements of type="button"

    => $("tr:even") :- Selects all even "tr" elements

    => $("tr:odd") :- Selects all odd "tr" elements

# jQuery Event

    => bind() : - Deprecated in version 3.0. Use the on() method instead. Attaches event handlers to elements

    => blur() : - Attaches/Triggers the blur event

    => change() : - Attaches/Triggers the change event

    => click() : - Attaches/Triggers the click event

    => dblclick() : - Attaches/Triggers the double click event

    => delegate() : - Deprecated in version 3.0. Use the on() method instead. Attaches a handler
    to current, or future, specified child elements of the matching elements

    => die() : - Removed in version 1.9. Removes all event handlers added with the live() method

    => error() : - Removed in version 3.0. Attaches/Triggers the error event

    => event.currentTarget : - The current DOM element within the event bubbling phase

    => event.data : - Contains the optional data passed to an event method when the current
    executing handler is bound

    => event.delegateTarget : - Returns the element where the currently-called jQuery event
    handler was attached

    => event.isDefaultPrevented() : - Returns whether event.preventDefault() was called for the
    event object

    => event.isImmediatePropagationStopped() : - Returns whether event.stopImmediatePropagation()
    was called for the event object

    => event.isPropagationStopped() : - Returns whether event.stopPropagation() was called for
    the event object

    => event.namespace : - Returns the namespace specified when the event was triggered

    => event.pageX : - Returns the mouse position relative to the left edge of the document

    => event.pageY : - Returns the mouse position relative to the top edge of the document

    => event.preventDefault() : - Prevents the default action of the event

    => event.relatedTarget : - Returns which element being entered or exited on mouse movement

    => event.result : - Contains the last/previous value returned by an event handler triggered
    by the specified event

    => event.stopImmediatePropagation() : - Prevents other event handlers from being called

    => event.stopPropagation() : - Prevents the event from bubbling up the DOM tree, preventing
    any parent handlers from being notified of the event

    => event.target : - Returns which DOM element triggered the event

    => event.timeStamp : - Returns the number of milliseconds since January 1, 1970, when the
    event is triggered

    => event.type : - Returns which event type was triggered

    => event.which : - Returns which keyboard key or mouse button was pressed for the event


    => focus() : - Attaches/Triggers the focus event

    => focusin() : - Attaches an event handler to the focusin event

    => focusout() : - Attaches an event handler to the focusout event

    => hover() : - Attaches two event handlers to the hover event

    => keydown() : - Attaches/Triggers the keydown event

    => keypress() : - Attaches/Triggers the keypress event

    => keyup() : - Attaches/Triggers the keyup event

    => live() : - Removed in version 1.9. Adds one or more event handlers to current, or future,

    selected elements

    => load() : - Removed in version 3.0. Attaches an event handler to the load event

    => mousedown() : - Attaches/Triggers the mousedown event

    => mouseenter() : - Attaches/Triggers the mouseenter event

    => mouseleave() : - Attaches/Triggers the mouseleave event

    => mousemove() : - Attaches/Triggers the mousemove event

    => mouseout() : - Attaches/Triggers the mouseout event

    => mouseover() : - Attaches/Triggers the mouseover event

    => mouseup() : - Attaches/Triggers the mouseup event

    => off() : - Removes event handlers attached with the on() method

    => on() : - Attaches event handlers to elements

    => one() : - Adds one or more event handlers to selected elements. This handler can only be
    triggered once per element

    => $.proxy() : - Takes an existing function and returns a new one with a particular context

    => ready() : - Specifies a function to execute when the DOM is fully loaded

    => resize() : - Attaches/Triggers the resize event

    => scroll() : - Attaches/Triggers the scroll event

    => select() : - Attaches/Triggers the select event

    => submit() : - Attaches/Triggers the submit event

    => toggle() : - Removed in version 1.9. Attaches two or more functions to toggle between for
    the click event

    => trigger() : - Triggers all events bound to the selected elements

    => triggerHandler() : - Triggers all functions bound to a specified event for the selected
    elements

    => unbind() : - Deprecated in version 3.0. Use the off() method instead. Removes an added
    event handler from selected elements

    => undelegate() : - Deprecated in version 3.0. Use the off() method instead. Removes an event
    handler to selected elements, now or in the future

    => unload() : - Removed in version 3.0. Attaches an event handler to the unload event

# Add Elements:-

    =>append() - Inserts content at the end of the selected elements

    =>prepend() - Inserts content at the beginning of the selected elements

    =>after() - Inserts content after the selected elements

    =>before() - Inserts content before the selected elements

# Remove Elements/Content :-

    => remove() - Removes the selected element (and its child elements)

    => empty() - Removes the child elements from the selected element

# Manipulating CSS :-

    => addClass() :- Adds one or more classes to the selected elements
   
    => removeClass() :- Removes one or more classes from the selected elements
   
    => toggleClass() :- Toggles between adding/removing classes from the selected elements
   
    => css() :- Sets or returns the style attribute.

# width() and height() :-

    => width() :- method sets or returns the width of an element (excludes padding, border and margin).

    => height() :- method sets or returns the height of an element (excludes padding, border and margin).

    => innerWidth() :- method returns the width of an element (includes padding).

    => innerHeight() :- method returns the height of an element (includes padding).

    => outerWidth() :- method returns the width of an element (includes padding and border).

    => outerHeight() :- method returns the height of an element (includes padding and border).

    => outerWidth(true) :- method returns the width of an element (includes padding, border, and margin).

    => outerHeight(true) :- method returns the height of an element (includes padding, border, and margin).

# Traversing :-

    => jQuery traversing, which means "move through", are used to "find" (or select) HTML elements based on their relation to other elements. Start with one selection and move through that selection until you reach the elements you desire.

    => parent() :- method returns the direct parent element of the selected element.

    => parents() :- method returns all ancestor elements of the selected element, all the way up to the document's root element

    => parentsUntil() :- method returns all ancestor elements between two given arguments.

    => children() :- The children() method returns all direct children of the selected element.

    => find() :-  method returns descendant elements of the selected element, all the way down to the last descendant

    ==============================================================================================

    Siblings :-
    








