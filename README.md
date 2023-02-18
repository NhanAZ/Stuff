### This place is just for me to take notes.
### If you are interested and looking for my plugins?
### Let's go to: https://github.com/nhanaz-pm-pl

---

# Contact
[![Discord](https://img.shields.io/discord/986553214889517088?label=discord&color=7289DA&logo=discord)](https://discord.gg/j2X83ujT6c)\
**You can contact me directly via Discord `NhanAZ#9115`**

```json
{
    "FormattingOptions": {
        "EnableEditorConfigSupport": false,
        "OrganizeImports": false,
        "NewLine": "\n",
        "UseTabs": true,
        "TabSize": 4,
        "IndentationSize": 4,
        "SpacingAfterMethodDeclarationName": false,
        "SpaceWithinMethodDeclarationParenthesis": false,
        "SpaceBetweenEmptyMethodDeclarationParentheses": false,
        "SpaceAfterMethodCallName": false,
        "SpaceWithinMethodCallParentheses": false,
        "SpaceBetweenEmptyMethodCallParentheses": false,
        "SpaceAfterControlFlowStatementKeyword": true,
        "SpaceWithinExpressionParentheses": false,
        "SpaceWithinCastParentheses": false,
        "SpaceWithinOtherParentheses": false,
        "SpaceAfterCast": false,
        "SpacesIgnoreAroundVariableDeclaration": false,
        "SpaceBeforeOpenSquareBracket": false,
        "SpaceBetweenEmptySquareBrackets": false,
        "SpaceWithinSquareBrackets": false,
        "SpaceAfterColonInBaseTypeDeclaration": true,
        "SpaceAfterComma": true,
        "SpaceAfterDot": false,
        "SpaceAfterSemicolonsInForStatement": true,
        "SpaceBeforeColonInBaseTypeDeclaration": true,
        "SpaceBeforeComma": false,
        "SpaceBeforeDot": false,
        "SpaceBeforeSemicolonsInForStatement": false,
        "SpacingAroundBinaryOperator": "single",
        "IndentBraces": false,
        "IndentBlock": true,
        "IndentSwitchSection": true,
        "IndentSwitchCaseSection": true,
        "IndentSwitchCaseSectionWhenBlock": true,
        "LabelPositioning": "oneLess",
        "WrappingPreserveSingleLine": true,
        "WrappingKeepStatementsOnSingleLine": true,
        "NewLinesForBracesInTypes": false,
        "NewLinesForBracesInMethods": false,
        "NewLinesForBracesInProperties": false,
        "NewLinesForBracesInAccessors": false,
        "NewLinesForBracesInAnonymousMethods": false,
        "NewLinesForBracesInControlBlocks": false,
        "NewLinesForBracesInAnonymousTypes": false,
        "NewLinesForBracesInObjectCollectionArrayInitializers": false,
        "NewLinesForBracesInLambdaExpressionBody": false,
        "NewLineForElse": false,
        "NewLineForCatch": false,
        "NewLineForFinally": false,
        "NewLineForMembersInObjectInit": false,
        "NewLineForMembersInAnonymousTypes": false,
        "NewLineForClausesInQuery": false
    }
}
```

```php
	private function centerText(string $text): string {
		// Tách các dòng văn bản thành mảng dựa trên ký tự xuống dòng \n
		$lines = explode("\n", $text);

		// Tìm chiều dài dòng dài nhất
		$max_length = 0;
		foreach ($lines as $line) {
			$line_length = strlen($line);
			if ($line_length > $max_length) {
				$max_length = $line_length;
			}
		}

		// Căn giữa từng dòng văn bản bằng cách thêm khoảng trắng vào đầu và cuối
		$centered_lines = array();
		foreach ($lines as $line) {
			$line_length = strlen($line);
			$padding_length = ($max_length - $line_length) / 2;
			$padding = str_repeat(" ", (int) $padding_length);
			$centered_line = $padding . $line . $padding;
			$centered_lines[] = $centered_line;
		}

		// Gộp lại các dòng văn bản thành một chuỗi
		$centered_text = implode("\n", $centered_lines);

		return $centered_text;
	}
```
