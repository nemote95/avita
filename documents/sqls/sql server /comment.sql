USE [online_shopping]
GO

/****** Object:  Table [dbo].[comment]    Script Date: 02/11/2016 10:40:41 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[comment](
	[COID] [int] NOT NULL,
	[text] [nvarchar](50) NOT NULL,
	[date] [date] NOT NULL,
	[PRID] [int] NOT NULL,
	[UID] [int] NOT NULL,
 CONSTRAINT [PK_comment] PRIMARY KEY CLUSTERED 
(
	[COID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[comment]  WITH CHECK ADD  CONSTRAINT [FK_comment_user] FOREIGN KEY([UID])
REFERENCES [dbo].[user] ([UID])
GO

ALTER TABLE [dbo].[comment] CHECK CONSTRAINT [FK_comment_user]
GO


