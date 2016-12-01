USE [online_shopping]
GO

/****** Object:  Table [dbo].[purchase]    Script Date: 02/11/2016 10:42:29 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[purchase](
	[PUID] [int] NOT NULL,
	[date] [date] NULL,
	[type] [bit] NOT NULL,
	[phone] [char](11) NULL,
	[last_name] [nvarchar](50) NULL,
	[first_name] [nvarchar](50) NULL,
	[address] [nvarchar](100) NULL,
	[BID] [int] NOT NULL,
	[DEID] [int] NULL,
 CONSTRAINT [PK_purchase] PRIMARY KEY CLUSTERED 
(
	[PUID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

ALTER TABLE [dbo].[purchase]  WITH CHECK ADD  CONSTRAINT [FK_purchase_basket] FOREIGN KEY([BID])
REFERENCES [dbo].[basket] ([BID])
GO

ALTER TABLE [dbo].[purchase] CHECK CONSTRAINT [FK_purchase_basket]
GO

ALTER TABLE [dbo].[purchase]  WITH CHECK ADD  CONSTRAINT [FK_purchase_deliverer] FOREIGN KEY([DEID])
REFERENCES [dbo].[delieverer] ([DEID])
GO

ALTER TABLE [dbo].[purchase] CHECK CONSTRAINT [FK_purchase_deliverer]
GO


