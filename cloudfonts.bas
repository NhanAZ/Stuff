Attribute VB_Name = "NewMacros"
Sub cloudfonts()

    para = 1
    For Each fontID In Application.FontNames
    ActiveDocument.Content.InsertAfter Text:=fontID
    ActiveDocument.Paragraphs(para).Range.Font.Name = fontID
    para = para + 1
    ActiveDocument.Content.InsertAfter Text:=vbCrLf
Next
End Sub
