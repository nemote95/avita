USE [online_shopping]
GO

/****** Object:  Table [dbo].[basket]    Script Date: 02/11/2016 10:37:10 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[basket](
	[BID] [int] NOT NULL,
	[UID] [int] NOT NULL,
 CONSTRAINT [PK_basket_1] PRIMARY KEY CLUSTERED 
(
	[BID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[basket]  WITH CHECK ADD  CONSTRAINT [FK_basket_user] FOREIGN KEY([UID])
REFERENCES [dbo].[user] ([UID])
GO

ALTER TABLE [dbo].[basket] CHECK CONSTRAINT [FK_basket_user]
GO

ALTER TABLE [dbo].[basket]  WITH CHECK ADD  CONSTRAINT [FK_basket_user1] FOREIGN KEY([UID])
REFERENCES [dbo].[user] ([UID])
GO

ALTER TABLE [dbo].[basket] CHECK CONSTRAINT [FK_basket_user1]
GO


