(function () {
  var groups = document.querySelectorAll('[data-filter-group]');

  function getGroupElements(group, selector) {
    return Array.prototype.filter.call(
      group.querySelectorAll(selector),
      function (element) {
        return element.closest('[data-filter-group]') === group;
      }
    );
  }

  groups.forEach(function (group) {
    var options = getGroupElements(group, '[data-filter-option]');
    var items = getGroupElements(group, '[data-filter-item]');
    var clearButtons = getGroupElements(group, '[data-filter-clear]');
    var emptyStates = getGroupElements(group, '[data-filter-empty]');
    var activeValue = '';

    function updateResults() {
      var visibleCount = 0;

      items.forEach(function (item) {
        var values = (item.getAttribute('data-filter-values') || '')
          .trim()
          .split(/\s+/);
        var isVisible = !activeValue || values.indexOf(activeValue) !== -1;

        item.hidden = !isVisible;
        if (isVisible) {
          visibleCount += 1;
        }
      });

      options.forEach(function (option) {
        option.setAttribute(
          'aria-pressed',
          String(option.getAttribute('data-filter-value') === activeValue)
        );
      });

      clearButtons.forEach(function (button) {
        button.disabled = !activeValue;
      });

      emptyStates.forEach(function (emptyState) {
        emptyState.hidden = visibleCount > 0;
      });
    }

    options.forEach(function (option) {
      option.addEventListener('click', function () {
        var value = option.getAttribute('data-filter-value');
        activeValue = activeValue === value ? '' : value;
        updateResults();
      });
    });

    clearButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        activeValue = '';
        updateResults();
      });
    });

    updateResults();
  });
})();
