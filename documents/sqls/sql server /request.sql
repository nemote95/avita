USE [online_shopping]
GO

/****** Object:  Table [dbo].[request]    Script Date: 02/11/2016 10:41:13 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[request](
	[RID] [int] NOT NULL,
	[UID] [int] NOT NULL,
	[text] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_request] PRIMARY KEY CLUSTERED 
(
	[RID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[request]  WITH CHECK ADD  CONSTRAINT [FK_request_user] FOREIGN KEY([UID])
REFERENCES [dbo].[user] ([UID])
GO

ALTER TABLE [dbo].[request] CHECK CONSTRAINT [FK_request_user]
GO


